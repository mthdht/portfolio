import React, { Component } from 'react';
import './App.css';
import Header from './Header'
import Board from './Board'
import Scores from './Scores'
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
                    <Board reStart={this.reStart} changeLevel={this.changeLevel}/>
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