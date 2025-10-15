

interface Usuario {
    usr:{
        nome: string;
    }
}



const Teste = ({ usr } : Usuario) => {
  return (
    <div>
      <h1>Olá! {usr.nome}</h1>
    </div>
  );
};

export default Teste;
