import React, { Component } from 'react';
import { createStackNavigator } from 'react-navigation-stack';
import { createAppContainer, createSwitchNavigator } from 'react-navigation';

//Importando Cenas
import Home from '../src/screens/Home/Home'
import Feed from '../src/screens/Feed/Feed'
import TipoCadastro from '../src/screens/FluxoCadastro/TipoCadastro'
import Desenvolvedor from '../src/screens/FluxoCadastro/Desenvolvedor'
import Startup from '../src/screens/FluxoCadastro/Startup'
import Google from '../src/screens/FluxoCadastro/Google'
import Linkedin from '../src/screens/FluxoCadastro/Linkedin'
import Senha from '../src/screens/Senha/Senha'
import { createDrawerNavigator } from 'react-navigation-drawer';
import CustomDrawerContentComponent from '../src/components/Drawer'

const DrawerConfig = {
    contentComponent: ({navigation}) => {
        return(<CustomDrawerContentComponent navigation={navigation} />)
    }
}

const AppNavigator = createStackNavigator({
    Home,
    TipoCadastro,
    Desenvolvedor,
    Google,
    Linkedin,
    Startup,
    Senha,
    Feed
},
    {
        initialRouteName: 'Home',
        headerMode: "none"
    }

);

const DrawerNavigator = createDrawerNavigator({
    Screen1: {
        screen: AppNavigator
    },
    Screen2: {
        screen: Senha
    }
    


},
DrawerConfig)

export default createAppContainer(DrawerNavigator);
