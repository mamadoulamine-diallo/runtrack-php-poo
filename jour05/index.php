<?php
class TicTacToe {
    private $grid;
    private $player1;
    private $player2;
    private $turnCount;

    public function __construct() {
        $this->grid = [[' ', ' ', ' '], [' ', ' ', ' '], [' ', ' ', ' ']];
        $this->turnCount = 1;
    }

    public function play() {
        $this->chooseSymbols();
        $this->displayGrid();
        
        while ($this->turnCount <= 9) {
            $this->makeMove();
            $this->displayGrid();
            if ($this->checkWinner()) {
                echo "Game over!\n";
                return;
            }
            $this->turnCount++;
        }
        
        echo "It's a tie!\n";
    }

    private function chooseSymbols() {
        echo "Player 1, do you want to be X or O? ";
        $this->player1 = trim(fgets(STDIN));
        $this->player2 = ($this->player1 === 'X') ? 'O' : 'X';
        echo "Player 2, you are {$this->player2}.\n";
    }

    private function displayGrid() {
        echo "---+---+---\n";
        foreach ($this->grid as $row) {
            echo " {$row[0]} | {$row[1]} | {$row[2]} \n";
            echo "---+---+---\n";
        }
    }

    private function makeMove() {
        $currentPlayer = ($this->turnCount % 2 !== 0) ? $this->player1 : $this->player2;
        echo "Player $currentPlayer, it's your turn.\n";
        
        do {
            echo "Pick a row (0-2): ";
            $row = intval(trim(fgets(STDIN)));
            echo "Pick a column (0-2): ";
            $col = intval(trim(fgets(STDIN)));
        } while (!$this->isValidMove($row, $col));
        
        $this->grid[$row][$col] = $currentPlayer;
    }

    private function isValidMove($row, $col) {
        if ($row < 0 || $row > 2 || $col < 0 || $col > 2) {
            echo "Out of bounds. Pick another one.\n";
            return false;
        }
        if ($this->grid[$row][$col] !== ' ') {
            echo "The square is already filled. Pick another one.\n";
            return false;
        }
        return true;
    }

    private function checkWinner() {
        $players = [$this->player1, $this->player2];
        foreach ($players as $player) {
            if ($this->isWinning($player)) {
                echo "Player $player, you won!\n";
                return true;
            }
        }
        return false;
    }

    private function isWinning($player) {
        for ($i = 0; $i < 3; $i++) {
            if ($this->grid[$i][0] === $player && $this->grid[$i][1] === $player && $this->grid[$i][2] === $player) return true;
            if ($this->grid[0][$i] === $player && $this->grid[1][$i] === $player && $this->grid[2][$i] === $player) return true;
        }
        if ($this->grid[0][0] === $player && $this->grid[1][1] === $player && $this->grid[2][2] === $player) return true;
        if ($this->grid[0][2] === $player && $this->grid[1][1] === $player && $this->grid[2][0] === $player) return true;
        return false;
    }
}

$game = new TicTacToe();
$game->play();
