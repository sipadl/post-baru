import React, { Component } from 'react'
import { FormComponent, TitleComponent } from './Component/index.js';
import { Formik } from 'formik';
import { generateFolder } from '../helper/MainHelper.js';

export default class Laravel extends Component {
  render() {
    return (
        <div>
            <TitleComponent config={{size:1, title:'Builder'}} />
            <hr />
            <Formik 
            initialValues={{
                name:'',
                table:'',
                mode:null,
                prefix:null
            }}
            onSubmit={ (values, {setSubmitting}) => {
                const tabel = values.table
                console.log(tabel.split(','))
                generateFolder()
            }}
            >
        {({
         values,
         handleSubmit,
         isSubmitting,
         handleChange,
         /* and other goodies */
       }) => (
                <form onSubmit={handleSubmit}>
                <FormComponent config={{tipe:'text', name:'name', function:handleChange}} />
                <FormComponent config={{tipe:'textarea', name:'table', size:9, function:handleChange }} />
                <FormComponent config={{tipe:'checkbox', name:'mode', size:9, function:handleChange }} />
                <FormComponent config={{tipe:'text', name:'prefix', function:handleChange}} />
                <div className='d-flex justify-content-end pt-4'>
                <button className='btn btn-lg btn-light' type='submit' disabled={isSubmitting}>Generate</button>
                </div>
                </form>
                )}
            </Formik>

        </div>
    )
  }
}
