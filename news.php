<?php
class News
{
    private $title = 'no title';//заголовок новости
    private $content = 'no content';//содержание новости
    private $eventTime = '';//время события
    private $proofText = 'original';//название источника
    private $proofLink = '#';//ссылка на источник
    
    public function setTitle($title)
    {
        if (!empty($title)) {
            $this->title = trim($title);
        }
        return $this;
    }
    
    public function setContent($content)
    {
        if (!empty($content)) {
            $this->content = trim($content);
        }
        return $this;
    }
    
    public function setProof($link, $text)
    {
        $src = trim($link);
        $txt = trim($text);
        if (!empty($txt)) {
            $this->proofText = $txt;
        }
        if (!empty($src)) {
            $this->proofLink = $src;
        }
        return $this;
    }
    
    private function getProof()
    {
        $proof = '<a href="'.$this->proofLink.'">'.$this->proofText.'</a>';
        return $proof;
    }

    public function getNews()
    {
        return $this;
    }
    
    public function output()
    {
        $newsContainer = new Container('news-content', $this->content);
        $titleContainer = new Container('news-title', $this->title);
        $timeContainer = new Container('news-time', $this->eventTime);
        $proofContainer = new Container('news-proof', $this->getProof());
        $newsContent = $titleContainer->output().$timeContainer->output().$newsContainer->output().$proofContainer->output();
        $mainContainer = new Container('news-main', $newsContent);
        echo $mainContainer->output();
    }
    
    public function __construct($title, $content, $link, $proof)
    {
        $this->setTitle($title)->setContent($content)->setProof($link, $proof);
        $this->eventTime = date('Y-m-d H:i:s', time());
    }
}

class Container
{
    private $cssClass = 'container';
    private $content = '';
    
    public function setClass($className)
    {
        if (!empty($className)) {
            $this->cssClass = trim($className);
        }
        return $this;
    }
    
    public function setContent($content)
    {
        if (!empty($content)) {
            $this->content = trim($content);
        }
        return $this;
    }
    
    public function output()
    {
        $div='<div class="'.$this->cssClass.'">'.$this->content.'</div>';
        return $div;
    }
    
    public function __construct($className, $content)
    {
        $this->setClass($className)->setContent($content);
    }
}

class NewsList
{
    private $items = [];
    private $count = 0;

    public function __construct()
    {

    }

    public function add($item)
    {
        if (isset($item)) {
            $this->count++;
            $key = $this->count;
            $this->items[$key] = &$item;
        }
    }

    public function delete($key)
    {
        if (isset($key, $this->items)) {
            unset($this->items[$key]);
            $this->count--;
        }
    }

    public function printList()
    {
        echo '<ul>';
        foreach ($this->items as $key => $item) {
            echo '<li>';
            $item->output();
            echo '</li>';
        }
        echo '</ul>';
    }
}//end class NewsList

?>