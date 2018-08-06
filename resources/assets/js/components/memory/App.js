import React, { Component } from 'react';
import './App.css';
import Header from './Header'
import Board from './Board'
import Scores from './Scores'
import ReactDOM from "react-dom";
import registerServiceWorker from './registerServiceWorker';

const colors = ["red", "blue", "orange", "green", "brown", "purple", "yellow", "blue-gray", "teal"];

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            colorsArray: this.getColorsArray(6),
            userScores: [],
            ranking: []
        };

        this.renderScores = this.renderScores.bind(this);
        this.reStart = this.reStart.bind(this);
    }

    shuffle(a) {
        var j, x, i;
        for (i = a.length - 1; i > 0; i--) {
            j = Math.floor(Math.random() * (i + 1));
            x = a[i];
            a[i] = a[j];
            a[j] = x;
        }
        return a;
    };

    getColorsArray(number) {
        const colorsArray = colors.slice(0, number);
        return this.shuffle(colorsArray.concat(colorsArray));
    }

    reStart() {
        this.setState({
            colorsArray: this.getColorsArray(6)
        });
    }

    renderScores() {
        axios.get('/memory/user-scores')
            .then((response) => {
                this.setState({
                    userScores: response.data
                });
                document.getElementById('scores-modal').style.display = 'block';
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    render() {
        const colorsArray = this.state.colorsArray;
        const scores = this.state.userScores;
        return (
            <div className="App">
                <Header renderScores={this.renderScores}/>
                <div className="w3-main">
                    <Scores scores={scores}/>
                    <Board colors={colorsArray} reStart={this.reStart}/>
                </div>
            </div>
        );
    }
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
    registerServiceWorker();
}