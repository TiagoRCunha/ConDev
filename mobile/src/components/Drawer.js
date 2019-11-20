
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

class CustomDrawerContentComponent extends Component {
    navLink(nav, text) {
        return (
            <TouchableOpacity
            onPress={() => {
                this.props.navigation.navigate(nav)
            }}>
                <Text>{text}</Text>
            </TouchableOpacity>
        )
    }
    render() {
        return (
            <View> 
                <View style={styles.container}>
                    <Text>Teste</Text>
                </View>
                <View>
                    {this.navLink('AppNavigator', 'Home')}
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

export default CustomDrawerContentComponent