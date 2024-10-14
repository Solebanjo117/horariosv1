

        <!-- Id input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text"  id="id" value="{{old('id',$alumno->id)}}" class="form-control" name="id" />
            <label class="form-label" for="id">Id</label>
            @error('id')
            <div class="alert alert-danger" role="alert">
               {{$message}}
              </div>
            @enderror
          </div>
        <!-- Name input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" id="nombre" value="{{old('nombre',$alumno->nombre)}}" class="form-control" name="nombre" />
          <label class="form-label" for="form4Example1">Nombres</label>
          @error('nombre')
          <div class="alert alert-danger" role="alert">
             {{$message}}
            </div>
          @enderror
        </div>
        <!-- Last Name input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="apellido" value="{{old('apellido',$alumno->apellido)}}" class="form-control" name="apellido" />
            <label class="form-label" for="form4Example1">Apellido Paterno</label>
            @error('apellido')
            <div class="alert alert-danger" role="alert">
               {{$message}}
              </div>
            @enderror
          </div>
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" id="email"
          value="{{old('email',$alumno->email)}}"
           class="form-control"   name="email" />
          <label class="form-label" for="form4Example2">Email address</label>
          @error('email')
          <div class="alert alert-danger" role="alert">
             {{$message}}
            </div>
          @enderror
        </div>
      
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Grabar</button>

