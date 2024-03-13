import React, { Component } from 'react'
import { CardComponent } from './Component'

export default class Home extends Component {
  render() {
    return (
        <div> 
            <div class="row p-2 d-flex justify-content-center">
                <CardComponent config={{size:3, title:'A', desc:'lorem ipsum dolor sit amet, consect', routes: '/', color:''}} />
                <CardComponent config={{size:3, title:'A', desc:'lorem ipsum dolor sit amet, consect', routes: '/', color:''}} />
            </div>
        </div>
    )
  }
}
