import { TestBed } from '@angular/core/testing';

import { FitasService } from './fitas.service';

describe('FitasService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: FitasService = TestBed.get(FitasService);
    expect(service).toBeTruthy();
  });
});
