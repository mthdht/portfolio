import React, { Component } from 'react';
import './App.css';
import Header from './Header'
import Board from './Board'
import Scores from './Scores'
import Ranking from './Ranking'
import ReactDOM from "react-dom";
import registerServiceWorker from './registerServiceWorker';

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            userScores: [],
            ranking: [],
        };

        this.renderScores = this.renderScores.bind(this);
        this.renderRanking = this.renderRanking.bind(this);
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

    renderRanking() {
        axios.get('/memory/ranking')
            .then((response) => {
                this.setState({
                    ranking: response.data
                });
                document.getElementById('ranking-modal').style.display = 'block';
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    render() {
        const scores = this.state.userScores;
        const ranking = this.state.ranking
        return (
            <div className="App">
                <Header renderScores={this.renderScores} renderRanking={this.renderRanking}/>
                <div className="w3-main">
                    <Scores scores={scores}/>
                    <Ranking scores={ranking}/>
                    <Board/>
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