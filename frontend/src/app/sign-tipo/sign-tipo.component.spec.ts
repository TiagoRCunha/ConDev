import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SignTipoComponent } from './sign-tipo.component';

describe('SignTipoComponent', () => {
  let component: SignTipoComponent;
  let fixture: ComponentFixture<SignTipoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SignTipoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SignTipoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
