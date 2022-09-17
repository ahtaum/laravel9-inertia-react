import React from 'react';
import Navbar from '@/Components/Navbar';

export default function Main({ children }) {
  return (
    <main id='mini-crm'>
        <Navbar />
        { children }
    </main>
  )
}
