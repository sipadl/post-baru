import React, {Component} from 'react'

export class Card extends Component {
    constructor(props) {
        super(props)
        this.state = {

        }
    }
    render() {
        const config = this.props.config;
        return (
        <div className={`col-sm-${config.size}`}>
          <div className="card">
            <div className={`card-body ${config.color}`}>
              <h5 className="card-title">{config.title}</h5>
              <p className="card-text">{config.title}</p>
              <a href={config.routes} className="btn btn-primary w-100">Go</a>
            </div>
          </div>
        </div>
        )
    }
}
export default Card