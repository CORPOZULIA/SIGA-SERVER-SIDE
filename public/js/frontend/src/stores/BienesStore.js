import React from 'react'
import Reflux from 'reflux'
import BienesActions from '../actions/BienesActions.js';

export default class BienesStore extends Reflux.Store{

	constructor(){
		super();
		this.listenToMany( BienesActions );
		this.state = {
			number: 0
		}
	}

	UploadBienesAction(){
		this.setState({
			number: ( this.state.number +1)
		})
	}
}