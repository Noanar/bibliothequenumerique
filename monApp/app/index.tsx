import React from 'react';
import { View, Button, Alert, StyleSheet } from 'react-native';

export default function HomeScreen() {
    const createDatabase = async () => {
        try {
            const response = await fetch('http://localhost/bibliothequenumerique/config/config.php'); // ← À remplacer
            const data = await response.json();

            if (data.success) {
                Alert.alert("Succès", data.message);
            } else {
                Alert.alert("Erreur", data.error || "Une erreur est survenue.");
            }
        } catch (error: any) {
            Alert.alert("Erreur de connexion", error.message);
        }
    };

    return (
        <View style={styles.container}>
            <Button title="Créer la base de données" onPress={createDatabase} />
        </View>
    );
}

const styles = StyleSheet.create({
    container: {
        marginTop: 150,
        padding: 20
    }
});