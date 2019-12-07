import { Component, OnInit } from '@angular/core';
import { Title } from '@angular/platform-browser';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {


  fitas = [
    { id: 1, nome: 'SimCity', ano: '1989', link: 'assets/img/fitas/SimCity.jpg', descricao: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum hendrerit ligula, bibendum maximus elit pretium id. Sed tincidunt quis nibh a dapibus. Nullam rutrum scelerisque volutpat. Cras tincidunt fringilla enim. Mauris purus mi, tincidunt non purus ac, tincidunt faucibus sapien. Phasellus ultrices pellentesque metus, in blandit dolor congue n' },
    { id: 2, nome: 'Top Gear', ano: '1992', link: 'assets/img/fitas/TopGear.jpg', descricao: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum hendrerit ligula, bibendum maximus elit pretium id. Sed tincidunt quis nibh a dapibus. Nullam rutrum scelerisque volutpat. Cras tincidunt fringilla enim. Mauris purus mi, tincidunt non purus ac, tincidunt faucibus sapien. Phasellus ultrices pellentesque metus, in blandit dolor congue n' },
    { id: 3, nome: 'Clay Mates', ano: '1991', link: 'assets/img/fitas/ClayMates.jpg', descricao: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum hendrerit ligula, bibendum maximus elit pretium id. Sed tincidunt quis nibh a dapibus. Nullam rutrum scelerisque volutpat. Cras tincidunt fringilla enim. Mauris purus mi, tincidunt non purus ac, tincidunt faucibus sapien. Phasellus ultrices pellentesque metus, in blandit dolor congue n' },
    { id: 5, nome: 'Batman Forever', ano: '1991', link: 'assets/img/fitas/batman.jpg', descricao: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum hendrerit ligula, bibendum maximus elit pretium id. Sed tincidunt quis nibh a dapibus. Nullam rutrum scelerisque volutpat. Cras tincidunt fringilla enim. Mauris purus mi, tincidunt non purus ac, tincidunt faucibus sapien. Phasellus ultrices pellentesque metus, in blandit dolor congue n' },
    { id: 6, nome: 'Tom and Jerry', ano: '1991', link: 'assets/img/fitas/tom.jpg', descricao: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum hendrerit ligula, bibendum maximus elit pretium id. Sed tincidunt quis nibh a dapibus. Nullam rutrum scelerisque volutpat. Cras tincidunt fringilla enim. Mauris purus mi, tincidunt non purus ac, tincidunt faucibus sapien. Phasellus ultrices pellentesque metus, in blandit dolor congue n' },
    { id: 7, nome: 'O Mascara', ano: '1991', link: 'assets/img/fitas/mask.jpg', descricao: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum hendrerit ligula, bibendum maximus elit pretium id. Sed tincidunt quis nibh a dapibus. Nullam rutrum scelerisque volutpat. Cras tincidunt fringilla enim. Mauris purus mi, tincidunt non purus ac, tincidunt faucibus sapien. Phasellus ultrices pellentesque metus, in blandit dolor congue nin blandit dolor congue n' },
    { id: 8, nome: 'James Bond jr', ano: '1991', link: 'assets/img/fitas/007.jpg', descricao: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum hendrerit ligula, bibendum maximus elit pretium id. Sed tincidunt quis nibh a dapibus. Nullam rutrum scelerisque volutpat. Cras tincidunt fringilla enim. Mauris purus mi, tincidunt non purus ac, tincidunt faucibus sapien. Phasellus ultrices pellentesque metus, in blandit dolor congue n' },


  ];

  constructor() {





  }

  ngOnInit() { 
    
}


}