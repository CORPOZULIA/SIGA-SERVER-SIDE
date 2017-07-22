import React from 'react'
import Reflux from 'reflux'
import logo from './logo.svg';
import './App.css';
import BienesActions from './actions/BienesActions.js';
import BienesStore from './stores/BienesStore.js'
import Header from  './components/generales/header.js'


class App extends Reflux.Component {

  constructor(){
    super();
    this.stores = [BienesStore, ];
  }

  btnClicked = () => {  
    BienesActions.UploadBienesAction();
  }
  render() {
    return (
      <div className="App">
      <Header />
        <div className="App-header">
          <img src={logo} className="App-logo" alt="logo" />

          <h2>Welcome to React</h2>
        </div>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
          <button type="button" id="btn" onClick={this.btnClicked}>Sumar</button>
          <strong>{this.state.number}</strong>
        </p>
      </div>
    );
  }
}

export default App;
