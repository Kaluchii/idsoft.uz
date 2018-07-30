<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

    public $timestamps = false;


    /**
     * Получить коллекцию всех элементов
     *
     * @return rating collection
     */
    public function getAllRatings()
    {
        $result = $this->get();
        return $result;
    }

    /**
     * Получить коллекцию всех элементов за исключением фэйковых записей
     *
     * @return rating collection
     */
    public function getAllRatingsWithoutFake()
    {
        $result = $this->where('ip', '<>', 'fake')->get();
        return $result;
    }

    /**
     * Получить коллекцию всех элементов по роуту
     *
     * @param string $route
     * @return rating collection
     */
    public function getRatingForRoute($route)
    {
        $result = $this->where('entity_name', $route)->get();
        return $result;
    }

    /**
     * Получить коллекцию всех элементов по роуту за исключением фэйковых записей
     *
     * @param string $route
     * @return rating collection
     */
    public function getRatingWithoutFake($route)
    {
        $result = $this->where('entity_name', $route)
            ->where('ip', '<>', 'fake')->get();
        return $result;
    }

    /**
     * Получить среднее значение рейтинга по роуту
     *
     * @param string $route
     * @return float
     */
    public function getRatingMiddleView($route)
    {
        $values = $this->where('entity_name', $route)->lists('value');
        $sum = 0;
        foreach ($values as $value) {
            $sum += $value;
        }
        $count = count($values);
        if ($count > 1) {
            $rating = $sum / $count;
            $result = round($rating, 1);
        } else {
            $result = $sum;
        }
        return $result;
    }

    /**
     * Получить значение рейтинга в процентах
     *
     * @param string $route
     * @return float
     */
    public function getRatingPercentView($route)
    {
        $values = $this->where('entity_name', $route)->lists('value');
        $sum = 0;
        foreach ($values as $value) {
            $sum += $value;
        }
        $count = count($values);
        if ($count > 1) {
            $rating = $sum * 20 / $count;
            $result = round($rating, 1);
        } else {
            $result = $sum * 20;
        }
        return $result;
    }

    /**
     * Получить среднее значение и значение рейтинга в процентах, колличество проголосовавших
     *
     * @param string $route
     * @return array
     */
    public function getRatingView($route)
    {
        $values = $this->where('entity_name', $route)->lists('value');
        $sum = 0;
        foreach ($values as $value) {
            $sum += $value;
        }
        $count = count($values);
        if ($count > 1) {
            $middleRating = round($sum / $count, 1);
            $percent = round($sum * 20 / $count, 1);
        } else {
            $middleRating = round($sum);
            $percent = round($sum * 20);
        }
        return ['middle' => $middleRating, 'percent' => $percent, 'count' => $count];
    }

    /**
     * Добавить запись рейтинга по роуту
     *
     * @param string $ip
     * @param string $entity_name
     * @param int $value
     * @return bool
     */
    public function addRating($ip, $entity_name, $value)
    {
        if ($value < 1) {
            return false;
        } else {
            if ($this->Unique($ip, $entity_name)) {
                if ($value > 5) {$value = 5;}
                $this->insert(['ip' => $ip, 'entity_name' => $entity_name, 'value' => $value]);
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Добавление фейковых записей рейтинга по роуту
     *
     * @param string $entity_name
     * @param int $count
     * @param int $from
     * @param int $to
     * @return array
     */
    public function addFakeRating($entity_name, $count, $from, $to)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->insert(['ip' => 'fake', 'entity_name' => $entity_name, 'value' => rand($from, $to)]);
        }
        return ['status' => 'ok'];
    }

    /**
     * Удаление записи по id
     *
     * @param int $id
     * @return array
     */
    public function delRating($id)
    {
        $this->where('id', $id)->delete();
        return ['status' => 'ok'];
    }

    /**
     * Проверка на повторное голосование по одному роуту
     *
     * @param string $ip
     * @param string $entity_name
     * @return bool
     */
    private function Unique($ip, $entity_name)
    {
        if ($this->where('ip', $ip)->where('entity_name', $entity_name)->get()->count() == 0) {
            return true;
        } else {
            return false;
        }
    }

}
