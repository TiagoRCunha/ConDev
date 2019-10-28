import { Component, OnInit } from '@angular/core';
import { ListService } from './lists.service';

@Component({
  selector: 'list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss']
})
export class ListComponent {
  title = 'List of courses';
  courses = ['Something'];
  // imageUrl = "https://placehold.it/500";
  count = 0;


  pushItemOnTheList(newCourse) {
    let item = this.courses.push(newCourse);
    console.log(this.courses);
  }

  onCount() {
    this.count += 1;
    console.log(`Button was clicked ${this.count} times`);
  }

  onRemove(course) {
    let index = this.courses.indexOf(course);
    this.courses.splice(index, 1);
  }

  onEdit(course){
    console.log('clicked', course);

  }

  constructor(service: ListService) { 
    // this.courses = service.getList();
  }

}
