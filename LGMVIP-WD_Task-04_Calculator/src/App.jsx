import React, { useState } from 'react';
import './App.css';

function App() {
  const [value, setValue] = useState('');

  return (
    
    <div className="container">
      <div className="calculator">
        <form action="">
          <div className='display'>
            <input type= "text" value={value}/>
            </div>
          <div>
            <input type="button" value="AC" onClick={e => setValue('')}/>
            <input type="button" value="DEL" className='del' onClick={e => setValue(value.slice(0, -1))}/>
            <input type="button" value="." className='fun' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="/" className='fun' onClick={e => setValue(value + e.target.value)}/>
          </div>
          <div>
            <input type="button" value="7" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="8" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="9" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="*" className='fun' onClick={e => setValue(value + e.target.value)}/>
          </div>
          <div>
            <input type="button" value="4" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="5" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="6" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="+" className='fun' onClick={e => setValue(value + e.target.value)}/>
          </div>
          <div>
            <input type="button" value="1" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="2" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="3" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="-" className='fun' onClick={e => setValue(value + e.target.value)}/>
          </div>
          <div>
            <input type="button" value="00" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="0" className='nos' onClick={e => setValue(value + e.target.value)}/>
            <input type="button" value="=" className='equal' onClick={e => setValue(eval(value))}/>
          </div>
        </form>
      </div>
    </div>
  );
}

export default App;