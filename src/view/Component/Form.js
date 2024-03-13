import React, { Component } from 'react'
export default class Form extends Component {
  JoinForEach = (tipe, data ) => {
    let join = [];
    data.forEach( (val , i) => {
        join.push(
        <div>    
        <input key={i} type={tipe} name={val.name} /> {val.title}
        </div>
        )
    })
    return join;
  }
  render() {
    const config = this.props.config
    return (
        <div>
            <div className='row'>
            <label className='text-label my-1 col-2'>{config.name}</label>
                <div className='col-10'>
                {config.tipe === 'radio' ?
                 this.JoinForEach(config.tipe, config.child)
                :
                <input
                className={config.tipe !== 'checkbox' ? 'form-control' : ''}
                type={config.tipe}
                name={config.name}
                placeholder={config.name}
                />

                }
                </div>
            </div>
        </div>
    )
  }
}
