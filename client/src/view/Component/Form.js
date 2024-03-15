import React, { Component } from 'react'
export default class Form extends Component {
  JoinForEach = (tipe, data ) => {
    let join = [];
    data.forEach( (val , i) => {
        join.push(
        <div key={i}>    
        <input type={tipe} name={val.name} 
        onChange={val.function}
        /> {val.title}
        </div>
        )
    })
    return join;
  }
  render() {
    const config = this.props.config
    return (
        <div>
            <div className='row mt-2'>
            <label className='text-label my-1 col-2'>{config.name}</label>
                <div className='col-10'>
                {config.tipe === 'radio' ?
                 this.JoinForEach(config.tipe, config.child)
                : config.tipe === 'textarea' ? 
                <textarea 
                className='form-control' 
                placeholder={config.name}
                onChange={config.function}
                name={config.name} rows={config.size} >
                </textarea>
                :
                <input
                className={config.tipe !== 'checkbox' ? 'form-control' : ''}
                onChange={config.function}
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
