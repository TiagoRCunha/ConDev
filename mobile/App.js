import React, { Component } from 'react';
import { AppRegistry } from 'react-native';
import Stack from './stack/Stack'
import 'react-native-gesture-handler'

export default class mobile extends Component {
  render() {
    return (    
      <Stack />
    );
  }
}

AppRegistry.registerComponent('mobile', () => mobile);
