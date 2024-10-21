import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class BookService {
  private apiUrl = 'http://localhost/api/book';

  constructor(private http: HttpClient) { }

  searchBook(title: string): Observable<any> {
      return this.http.get<any>(`${this.apiUrl}/search/${title}`);
  }
}
