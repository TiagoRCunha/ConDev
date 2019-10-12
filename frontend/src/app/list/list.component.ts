import { Component, OnInit } from '@angular/core';
import { ListService } from './lists.service';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss']
})
export class ListComponent implements OnInit {
  title = 'list';
  courses;
  constructor(service: ListService) { 
    this.courses = service.getList();
  }

  ngOnInit() {
  }

}
