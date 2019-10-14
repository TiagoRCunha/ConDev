import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-favorite',
  templateUrl: './favorite.component.html',
  styleUrls: ['./favorite.component.scss']
})
export class FavoriteComponent {
  @Input('isFavorite') isSelected: boolean;
  @Output() change = new EventEmitter();
  favorite: string;
  title = 'How to use icon and external events';
  constructor() { this.favorite = 'favorite'}

  onClick() {
    this.isSelected = !this.isSelected;
    this.isSelected ? this.favorite = 'favorite' : this.favorite = 'favorite_border';
    this.change.emit({ newValue: this.isSelected});
  }
}

export interface FavoriteChangeEventArgs {
  newValue: boolean
}
