import React, { Component } from 'react';
import { View, Text, TextInput, ScrollView, Alert, TouchableOpacity } from 'react-native';
import Estilo from './Estilo'
import { BotaoEntrar, BotaoCadastrar, BotaoEsqueciSenha, BotaoGoogle, BotaoLinkedin } from '../../components/Button'
import NavBar from '../../components/NavBar'
import Ionicons from 'react-native-vector-icons/Ionicons'


const image = <Ionicons
  name="md-image"
  size={100}
  color='#000000'
/>

const xbox = <Ionicons
  name="logo-xbox"
  size={25}
  color='#000000'
/>

const xbox2 = <Ionicons
  name="logo-xbox"
  size={40}
  color='#000000'
/>

const windows = <Ionicons
  name="logo-windows"
  size={40}
  color='#000000'
/>

const play = <Ionicons
  name="logo-playstation"
  size={40}
  color='#000000'
/>

export default class Feed extends Component {
  render() {
    return (
      <ScrollView>

        <View style={{
          flexDirection: 'row',
          width: '100%',
          elevation: 10,
          backgroundColor: 'white'

        }}>
          <NavBar
            LarguraMenuFeed={{ ...Estilo.viewMenu, width: '15%' }} />
          <ScrollView
            style={{ height: 50, width: '80%' }}
            horizontal
            showsHorizontalScrollIndicator={false}>
            <View style={{  paddingHorizontal: 50}}>
              {xbox2}
            </View>
            <View style={{  paddingHorizontal: 50}}>
              {play}
            </View>
            <View style={{  paddingHorizontal: 50}}>
              {windows}
            </View>
          </ScrollView>


        </View>

        <View style={{ flex: 1, height: 700, padding: 10 }}>
          <View style={{  height: 400 }}>
            <View style={{ height: '10%', width: '100%',  flexDirection: 'row' }}>
              <View style={{  justifyContent: 'center', margin:5}}>
                {xbox}
              </View>
              <View style={{ justifyContent: 'center'}}>
                <Text>XBox</Text>
              </View>
            </View>
            <View style={{ borderWidth: 1, height: '65%', width: '100%', alignItems: 'center', justifyContent: 'center', borderRadius: 25 }}>
              {image}
            </View>
            <View style={{  width: '100%', height: '25%', padding: 10 }}>
              <Text>
                Sem Internet
              </Text>
              <Text>
                descricaodescricaodescricaodescricaodescricaodescricaodescricaodescricaodescricaodescricaodescricaodescricaodescricao
              </Text>
            </View>
          </View>


        </View >
      </ScrollView>

    );
  }
}
