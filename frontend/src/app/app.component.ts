import { Component } from '@angular/core';
import { FavoriteChangeEventArgs } from './favorite/favorite.component';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'frontend';
  post = {
    title: "title",
    isFavorite: true
  }

  onFavoriteChange(eventArgs: FavoriteChangeEventArgs){
    console.log('favorite changed', eventArgs);
  }
}
