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
        <div class={`col-sm-${config.size}`}>
          <div class="card">
            <div class={`card-body ${config.color}`}>
              <h5 class="card-title">{config.title}</h5>
              <p class="card-text">{config.title}</p>
              <a href={config.routes} class="btn btn-primary w-100">Go</a>
            </div>
          </div>
        </div>
        )
    }
}
export default Card