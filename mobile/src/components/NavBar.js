
import React, { Component } from 'react';
import {
    View,
    ScrollView,
    Text,
    Image,
    Switch,
    TouchableOpacity,
    FlatList,
    Alert,
    StyleSheet
} from 'react-native';
import SafeAreaView from 'react-native-safe-area-view';
import { DrawerItems } from 'react-navigation-drawer';
import Estilo from './Estilo';
import Ionicons from 'react-native-vector-icons/Ionicons'
import { withNavigation } from 'react-navigation';

const menu = <Ionicons
    name="ios-menu"
    size={40}
    color='black'
/>

class NavBar extends Component {

    constructor(props){
        super(props)
    }

    render() {
        return (

            <View style={this.props.LarguraMenuFeed ? this.props.LarguraMenuFeed : Estilo.viewMenu}>
                <TouchableOpacity
                onPress={()=>{
                    this.props.navigation.toggleDrawer()}}>
                    <View style={{
                        marginLeft: 10
                    }}>
                        {menu}
                    </View>
                    
                </TouchableOpacity>
                <View style={{width: '80%', alignItems: 'center'}}>
                    <Text style={{fontSize: 20, fontWeight: 'bold'}}>{this.props.text}</Text>
                </View>


            </View>
        )
    }

};

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: 'white'
    },
});

export default withNavigation(NavBar);