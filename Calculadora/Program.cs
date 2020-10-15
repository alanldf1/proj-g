using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Calculadora

{

    class Program

    {

        static void Main(string[] args)

        {
            Console.Title = "Calculadora";
            Console.WriteLine("==================================== Calculadora ====================================");

            double v1 = 0, v2 = 0, result, numero;
            string op, valueTyped;
            bool isNumeroInteiro;

            Console.WriteLine("Seu nome: ");
            string userName = Console.ReadLine ();

            Console.WriteLine("Digite o primeiro valor que deseja calcular: ");
            valueTyped = Console.ReadLine();

            isNumeroInteiro = double.TryParse(valueTyped, out numero);

            if (isNumeroInteiro)
            {
                v1 = Math.Round(double.Parse(valueTyped), 4);
            }
            else
            {
                Console.WriteLine("Digite um número válido");
            }

            Console.WriteLine("Digite a operação que deseja realizar ('/ | + | * | -')");
            op = Console.ReadLine();

            Console.WriteLine("Digite o segundo valor: ");
            valueTyped = Console.ReadLine();
            isNumeroInteiro = double.TryParse(valueTyped, out numero);

            if (isNumeroInteiro)
            {
                v2 = Math.Round(double.Parse(valueTyped), 4);
            }
            else
            {
                Console.WriteLine("Digite um número válido");
            }

            switch (op)
            {
                case "+":
                    Console.Clear();
                    result = Math.Round(v1 + v2, 4);
                    Console.WriteLine("Seu nome é : " + userName + "\n" + $"O resultado do cálculo: { v1 } {'+'} { v2 } = {result}");
                    Console.WriteLine("\n Pressione enter para finalizar o programa.");
                    break;

                case "-":
                    Console.Clear();
                    result = Math.Round(v1 - v2, 4);
                    Console.WriteLine("Seu nome é : " + userName + "\n" + $"O resultado do cálculo: { v1 } {'-'} { v2 } = {result}");
                    Console.WriteLine("\n Pressione enter para finalizar o programa.");
                    break;

                case "*":
                    Console.Clear();
                    result = Math.Round(v1 * v2, 4);
                    Console.WriteLine("Seu nome é : " + userName + "\n" + $"O resultado do cálculo: { v1 } {'*'} { v2 } = {result}");
                    Console.WriteLine("\n Pressione enter para finalizar o programa.");
                    break;

                case "/":
                    Console.Clear();
                    result = Math.Round(v1 / v2, 4);
                    Console.WriteLine("Seu nome é : " + userName + "\n" + $"O resultado do cálculo: { v1 } {'/'} { v2 } = {result}");
                    Console.WriteLine("\n Pressione enter para finalizar o programa.");
                    break;
                default:
                    Console.WriteLine("Digite um operação válida");
                    break;
            }

            Console.ReadKey();

        }

    }

}