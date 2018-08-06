import React, { Component } from 'react';
import Card from "./Card";

class Board extends Component {
    constructor(props) {
        super(props);
        this.state = {
            pairs: [],
            currentPair: [],
            cards: this.generateCards()
        };
        this.handleCardClick = this.handleCardClick.bind(this);
        this.restart = this.restart.bind(this);
        this.handleLevelChange = this.handleLevelChange.bind(this);
    }

    generateCards() {
        const cards = [];

        this.props.colors.forEach((color, index) => {
            cards.push({face: color, status: 'hidden', id: index});
        });

        return cards;
    };

    getStatus(index) {
        const {currentPair, pairs, cards} = this.state;

        if (currentPair.includes(cards[index]) || pairs.includes(cards[index])) {
            return "visible";
        } else return "hidden"
    }

    handleCardClick(index) {
        const {currentPair, cards} = this.state;

        if (currentPair.length === 2) {
            return;
        }

        if (currentPair.length === 0) {
            this.setState({
                currentPair: [cards[index]]
            });
            return;
        }

        if (currentPair.length === 1) {
            this.handlePairAttempt(index);
        }

    };

    handlePairAttempt(index) {
        const { currentPair, pairs, cards} = this.state;
        currentPair.push(cards[index]);
        this.setState({currentPair});

        if (currentPair[0].face === currentPair[1].face && currentPair[0].id !== currentPair[1].id) {
            this.setState({
                pairs: [...pairs, ...currentPair],
            });
            setTimeout(() => {
                if (this.state.pairs.length === cards.length) {
                    // send score
                    axios.post('/memory/add', {
                        score: 90,
                        guesses: 10
                    }).then(function (response) {
                            return response.data;
                    }).catch(function (error) {
                            console.log(error);
                    });
                }
            }, 1000);

        }

        setTimeout(() => this.setState({currentPair: []}), 1000);

    }

    restart() {
        this.props.reStart();
        this.setState({
            cards: this.generateCards(),
            pairs: [],
            currentPair: []
        });
    }

    handleLevelChange(e) {
        this.props.changeLevel(e);
        setTimeout(() => this.restart(), 500);
    }

    render() {
        const cards = [];
        this.state.cards.forEach((card) => {
            cards.push(<Card face={card.face} status={this.getStatus(card.id)} index={card.id} key={card.id} handleCardClick={this.handleCardClick}/>);
        });

        return (
            <div className={"board"}>
                <div className="cards w3-row">
                    {cards}
                </div>

                <button onClick={this.restart}>Restart</button>

                <select name="" id="" value={this.state.colorNumber} onChange={(e) => this.handleLevelChange(e)}>
                    <option value="6">Facile</option>
                    <option value="9">Moyen</option>
                    <option value="12">Difficile</option>
                    <option value="15">Expert</option>
                </select>
            </div>
        )
    }
}

export default Board;