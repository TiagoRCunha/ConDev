import { Component, OnInit, ViewEncapsulation } from '@angular/core';

@Component({
  selector: 'handle-css',
  templateUrl: './handle-css.component.html',
  styleUrls: ['./handle-css.component.scss'],
  encapsulation: ViewEncapsulation.Emulated
  // styles: [
  //   `
  //   .handleCssOverwritting {
  //     background-color: green;
  //   }
  //   `
  // ]
})
export class HandleCssComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
