import React, { Component } from 'react'

export default class Title extends Component {
  render() {
    const config = this.props.config
    if(config.size === 1 ){
        return (
            <div>
                <h1>{config.title}</h1>
            </div>
        )
    }
    if(config.size === 2 ){
        return (
            <div>
                <h2>{config.title}</h2>
            </div>
        )
    }
    if(config.size === 3 ){
        return (
            <div>
                <h3>{config.title}</h3>
            </div>
        )
    }
    if(config.size === 4 ){
        return (
            <div>
                <h4>{config.title}</h4>
            </div>
        )
    }
    if(config.size === 5 ){
        return (
            <div>
                <h5>{config.title}</h5>
            </div>
        )
    }
    if(config.size === 'p'){
        return (
            <div>
                <p>{config.title}</p>
            </div>
        )
    }
    if(config.size === 'small'){
        return (
            <div>
                <small>{config.title}</small>
            </div>
        )
    }
  }
}
