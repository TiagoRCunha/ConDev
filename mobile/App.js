import React, { Component } from 'react';
import { AppRegistry, View, Text } from 'react-native';
import Home from './src/screens/Home/Home'

export default class mobile extends Component {
  render() {
    return (    
      <Home />
    );
  }
}

AppRegistry.registerComponent('mobile', () => mobile);
