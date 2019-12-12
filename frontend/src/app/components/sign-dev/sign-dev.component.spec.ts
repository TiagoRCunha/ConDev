import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SignDevComponent } from './sign-dev.component';

describe('SignDevComponent', () => {
  let component: SignDevComponent;
  let fixture: ComponentFixture<SignDevComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SignDevComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SignDevComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
