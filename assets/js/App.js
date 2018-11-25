import React, { Component } from 'react';
import AppRouter from "./router/BrowserRouter";

class App extends Component {

  render() {
    return (
      <div className="App">
        <AppRouter/>
      </div>
    );
  }
}

export default App;
