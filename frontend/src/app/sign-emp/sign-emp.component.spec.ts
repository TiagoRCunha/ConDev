import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SignEmpComponent } from './sign-emp.component';

describe('SignEmpComponent', () => {
  let component: SignEmpComponent;
  let fixture: ComponentFixture<SignEmpComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SignEmpComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SignEmpComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
