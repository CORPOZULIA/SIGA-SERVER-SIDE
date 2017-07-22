import React, {Component} from 'react'
import {Navbar, Nav, NavItem} from 'react-bootstrap'
import 'bootstrap/dist/css/bootstrap.css';
import '../../css/styles.css';
import {Link} from 'react-router-dom'

export default class Header extends Component{

	constructor(props){
		super(props)
	}


	render(){

		return(
			<Navbar className="nav">
				<Navbar.Header>

					<Navbar.Brand>
						<a href="#">B</a>
					</Navbar.Brand>
					<Navbar.Toggle />
				</Navbar.Header>
				<Nav>
					<NavItem href="#">
						Inicio
					</NavItem>
				</Nav>
			</Navbar>
		)
	}

}