import { Pipe, PipeTransform } from '@angular/core';
/**
 * Auto-Generated with ng g p summaryPipe
 */
@Pipe({
  name: 'summary'
})
export class SummaryPipe implements PipeTransform {

  transform(value: string, limit?: number): any {
    if (!value)
        return null;
    let actualLimit = (limit) ? limit : 50;
    return value.substr(0, actualLimit) + '...';
  }

}
