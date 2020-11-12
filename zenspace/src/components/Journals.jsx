import React, { Component } from 'react';

class Journals extends Component {
    render() {
        return (
            <div>
        <title>ZenSpace - Today</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charSet="UTF-8" />
        <div id="root">
          <div id="header">
            {/*This should be shown at the top for mobile and at the side for desktop*/}
            <h1>ZenSpace</h1>
            <img src = "img/Logo.png" style={{width: '200px', height: '200px'}} alt = "logo of zenspace"></img>
            <ul id="nav">
              <li><a href="home.html">Today</a></li>
              <li><a href="guides.html">Guides</a></li>
              <li>Journals</li>
              <li><a href="medals.html">Medals</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="about.html">About Us</a></li>
            </ul>
          </div>
          <div id="main">
            <br />
            {/*Journals are displayed each with their contents folded, unfolding if clicked to show them.*/}
            {/*They're organized in a chronological list, the most recent shown first.*/}
            <form className="panelwide" id="search" action="/search.php">
              <input type="text" id="searchtext" name="searchtext" size={30} placeholder="Search Guides, Tasks, Journals, etc." required />
              <input type="submit" defaultValue="Search" />
            </form>
            <br />
            <div className="panelwide" id="journals">
              <h2>Journals</h2>
              <a href="javascript:alert('This would bring up a prompt for making a journal.');">Add New Journal</a>
              <ul className="journallist">
                {/*Journals will populate this list when read from the server.*/}
                <li>
                  <div className="journalentry">
                    <h3>Meditation Journal</h3>
                    <div>Date: 10/17/2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis tellus ac nisl dictum suscipit id vel tellus. Mauris vestibulum euismod massa ac sagittis. Donec sit amet orci a mauris elementum aliquam. Praesent fringilla hendrerit aliquet. Proin tempor laoreet ligula at aliquam. Curabitur volutpat elit nec ex dictum finibus quis et erat. Sed eu molestie urna.</p>
                    <div className="mood">Mood Rating: 6/10</div>
                    <a href="javascript:alert('This'll let you edit the journal in its entirety.');">Edit Journal</a>
                  </div>
                </li>
                <li>
                  <div className="journalentry">
                    <h3>Relaxation Journal</h3>
                    <div>Date: 10/21/2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis tellus ac nisl dictum suscipit id vel tellus. Mauris vestibulum euismod massa ac sagittis. Donec sit amet orci a mauris elementum aliquam. Praesent fringilla hendrerit aliquet. Proin tempor laoreet ligula at aliquam. Curabitur volutpat elit nec ex dictum finibus quis et erat. Sed eu molestie urna.</p>
                    <div className="mood">Mood Rating: 9/10</div>
                    <a href="javascript:alert('This'll let you edit the journal in its entirety.');">Edit Journal</a>
                  </div>
                </li>
              </ul>
            </div>
            <br />
          </div>
          <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by React.</p>
          </div>
        </div>
      </div>
        )
    }
}
export default Journals;