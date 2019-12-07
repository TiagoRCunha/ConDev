import { Component, OnInit } from '@angular/core';
import {ConfirmationService} from 'primeng/api';
import { MessageService } from 'primeng/api';


@Component({
  selector: 'app-editar-perfil',
  templateUrl: './editar-perfil.component.html',
  styleUrls: ['./editar-perfil.component.css']
})
export class EditarPerfilComponent implements OnInit {

  display: boolean = false;
  uploadedFiles: any[] = [];

  constructor(private messageService: MessageService,
    private confirmationService: ConfirmationService


  ) { }

  ngOnInit() {
  }

  onUpload(event) {
    for(let file of event.files) {
        this.uploadedFiles.push(file);
    }
  
    this.messageService.add({severity: 'info', summary: 'File Uploaded', detail: ''});
  }

  showDialog() {
    this.display = true;
}

}
