<div>
    @forelse($aboutus as $aboutus)
  {{ $aboutus->aboutus }}
@empty
<h3> Come back soon to see about us here.
  By now myles is watching baruto.
</h3>
@endforelse

</div>