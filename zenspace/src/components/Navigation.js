import React from 'react';
 
import { NavLink } from 'react-router-dom';
 
const Navigation = () => {
    return (
       <div>
          <NavLink to="/">Today</NavLink>
          <br></br>
          <NavLink to="/about">About</NavLink>
          <br></br>
          <NavLink to="/journals">Journals</NavLink>
          <br></br>
          <NavLink to="/guides">Guides</NavLink>
          <br></br>
          <NavLink to="/medals">Medals</NavLink>
          <br></br>
          <NavLink to="/profile">Profile</NavLink>
       </div>
    );
}
 
export default Navigation;