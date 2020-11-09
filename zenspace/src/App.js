import React, { Component } from 'react';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
 
import Home from './components/Today';
import About from './components/About';
import Journals from './components/Journals';
import Guides from './components/Guides';
import Medals from './components/Medals';
import Profile from './components/Profile';
import Navigation from './components/Navigation';
 
class App extends Component {
  render() {
    return (      
       <BrowserRouter>
        <div>
          <Navigation />
            <Switch>
             <Route path="/" component={Home} exact/>
             <Route path="/about" component={About}/>
             <Route path="/journals" component={Journals}/>
             <Route path="/guides" component={Guides}/>
             <Route path="/medals" component={Medals}/>
             <Route path="/profile" component={Profile}/>
            <Route component={Error}/>
           </Switch>
        </div> 
      </BrowserRouter>
    );
  }
}
 
export default App;