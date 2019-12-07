import { Component, OnInit } from '@angular/core';



//Componentes importados como exemplos
import { MessageService } from 'primeng/api';
import {Message} from 'primeng/components/common/api';
import {ConfirmationService} from 'primeng/api';



@Component({
  selector: 'app-componente-exemplo',
  templateUrl: './componente-exemplo.component.html',
  styleUrls: ['./componente-exemplo.component.css']
})
export class ComponenteExemploComponent implements OnInit {

  msgs: Message[] = [];
  images: any[];
  uploadedFiles: any[] = [];

  providers: [MessageService,ConfirmationService]

  constructor(private messageService: MessageService,
    private ConfirmationService: ConfirmationService,   
) { 
  this.images = [];
  this.images.push({ title:'Evento da google que por sinal  foi demais !! ', source:'assets/img/eventos/google.jpg', thumbnail: 'assets/img/eventos/google-tumb.jpg', });



}

  ngOnInit() {
  }

/////////////////////////////// Menssagem comum //////////////////////////////

  showSuccess() {
    this.msgs = [];
    this.msgs.push({severity:'success', summary:'Success Message', detail:'Order submitted'});
    console.log('ssada')
}

showInfo() {
    this.msgs = [];
    this.msgs.push({severity:'info', summary:'Info Message', detail:'PrimeNG rocks'});
}

showWarn() {
    this.msgs = [];
    this.msgs.push({severity:'warn', summary:'Warn Message', detail:'There are unsaved changes'});
}

showError() {
    this.msgs = [];
    this.msgs.push({severity:'error', summary:'Campos invalidos', detail:'Prencha corretamente'});
}

showMultiple() {
    this.msgs = [];
    this.msgs.push({severity:'info', summary:'Message 1', detail:'PrimeNG rocks'});
    this.msgs.push({severity:'info', summary:'Message 2', detail:'PrimeUI rocks'});
    this.msgs.push({severity:'info', summary:'Message 3', detail:'PrimeFaces rocks'});
}

showViaService() {
    this.messageService.add({severity:'success', summary:'Service Message', detail:'Via MessageService'});
}
clear() {
  this.msgs = [];
}




/////////////////////////////// Menssagem Toasty //////////////////////////////


showTopCenter() {
  this.messageService.add({key: 'tc', severity:'warn', summary: 'Info Message', detail:'PrimeNG rocks'});
}


/////////////////////////////// Confirmação //////////////////////////////

confirm() {
  this.ConfirmationService.confirm({
      message: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper sapien a tellus faucibus interdum. Sed venenatis ante eget neque vulputate, iaculis faucibus elit pretium. Duis non rutrum turpis, a mollis orci. Nulla vitae mauris vel lacus elementum ornare vitae ut metus. Proin sodales risus',
      header: 'Voce aceita nossos termos de uso ?',
      icon: 'pi pi-exclamation-triangle',
      accept: () => {
          this.msgs = [{severity:'info', summary:'Você aceitou os termos de uso', detail:'Muito obrigado por aceitar os termos'}];
      },
      reject: () => {
          this.msgs = [{severity:'info', summary:'Rejected', detail:'You have rejected'}];
      }
  });
}


/////////////////////////////// Upload //////////////////////////////

onUpload(event) {
  for(let file of event.files) {
      this.uploadedFiles.push(file);
  }

  this.messageService.add({severity: 'info', summary: 'File Uploaded', detail: ''});
}


/////////////////////////////// Captcha //////////////////////////////

showResponse(event) {
  this.messageService.add({severity:'info', summary:'Succees', detail: 'User Responded', sticky: true});
}


}
