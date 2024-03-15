import React, { Component } from 'react'
import { CardComponent, FormComponent, TitleComponent } from './Component'

export default class Home extends Component {
  render() {
    return (
        <div className='container'> 
            <TitleComponent config={{size:1, title:'Card Modular'}} />
            <div className="row p-2 d-flex justify-content-center">
                <CardComponent config={{size:3, title:'A', desc:'lorem ipsum dolor sit amet, consect', routes: '/', color:''}} />
                <CardComponent config={{size:3, title:'A', desc:'lorem ipsum dolor sit amet, consect', routes: '/', color:''}} />
                <div className='p-2'>
                <TitleComponent config={{size:1, title:'Input Ground'}} />
                <FormComponent config={{tipe:'text', name:'Nama'}} /> 
                <FormComponent config={{tipe:'checkbox', name:'Checkbox'}} /> 
                <FormComponent config={{tipe:'radio', child:[{name:'a',title:'A'},{name:'a', title:'B'}]}} /> 
                </div>
            </div>
        </div>
    )
  }
}
