import React, { Component } from 'react'



export default class Navbar extends Component {
joinLi = (data) => {
    let join = [];
    data.forEach((val, i) => {
       join.push(<li key={i} className={`nav-item ${i === 0 ? 'active' : '' }`}>
            <a className="nav-link" href={val.url}>{val.name} <span className="sr-only"></span></a>
        </li>)
    });
    return join;
}
  render() {
    const config = this.props.config
    return (
      <div>
        <nav className="navbar navbar-expand-lg navbar-light bg-light">
        <a className="navbar-brand mx-2" href="/">
            <img src={config.logos} className="img-fluid img-rounded" alt="..." />
        </a>
        <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarNav">
            <ul className="navbar-nav">
            {this.joinLi(config.link)}
            </ul>
        </div>
        </nav>
      </div>
    )
  }
}
