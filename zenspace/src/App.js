import React from 'react';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  NavLink
} from 'react-router-dom';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import { CookiesProvider, useCookies } from "react-cookie";
import Login from './components/Login';
import FormData from './components/Data';
import Today from './components/Today';
import Guides from './components/Guides';
import Journals from './components/Journals';
import Medals from './components/Medals';
import Profile from './components/Profile';
import About from './components/About';
import './App.css';
function App() {
  const [cookies] = useCookies(["user"]);

  if (cookies.user == "" || cookies.user == null) {
    return (    
      <CookiesProvider>
        <Login/>
      </CookiesProvider>
    );
  }
  else {
    return (
      <div className="App">
        <CookiesProvider>
          <Router>
            <div id="header">
                <h1>ZenSpace</h1>
                <nav>
                  <ul>
                    <li><NavLink 
                      to="/" 
                      activeClassName="selected">
                      Today
                    </NavLink></li>
                    <li><NavLink 
                      to="/guides" 
                      activeClassName="selected">
                      Guides
                    </NavLink></li>
                    <li><NavLink 
                      to="/Data" 
                      activeClassName="selected">
                      Data
                    </NavLink></li>
                    <li><NavLink 
                      to="/journals" 
                      activeClassName="selected">
                      Journals
                    </NavLink></li>
                    <li><NavLink 
                      to="/medals" 
                      activeClassName="selected">
                      Medals
                    </NavLink></li>
                    <li><NavLink 
                      to="/profile" 
                      activeClassName="selected">
                      Profile
                    </NavLink></li>
                    <li><NavLink 
                      to="/about" 
                      activeClassName="selected">
                      About Us
                    </NavLink></li>
                  </ul>
                </nav>
            </div>
            <Switch>
              <Route path="/guides">
                <Guides />
              </Route>
              <Route path="/journals">
                <Journals />
              </Route>
              <Route path="/medals">
                <Medals />
              </Route>
              <Route path="/profile">
                <Profile />
              </Route>
              <Route path="/data">
                <FormData />
              </Route>
              <Route path="/about">
                <About />
              </Route>
              <Route path="/">
                <Today />
              </Route>
            </Switch>
          </Router>
        </CookiesProvider>
      </div>
    );
  }
}
export default App;