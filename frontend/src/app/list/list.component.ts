import { Component, OnInit } from '@angular/core';
import { ListService } from './lists.service';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss']
})
export class ListComponent implements OnInit {
  title = 'test';
  // courses;
  // imageUrl = "https://placehold.it/500";
  count = 0;

  onCount() {
    this.count += 1;
    console.log(`Button was clicked ${this.count} times`);
  }
  constructor(service: ListService) { 
    // this.courses = service.getList();
  }

  ngOnInit() {
  }

}
