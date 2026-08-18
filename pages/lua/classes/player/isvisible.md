<function name="IsVisible" parent="Player" type="classfunc">
	<description>
		Returns the player's base visibility state.<br>
		This does not account for item or slasher effects.<br>
		Use <page>Player:CanBeSeen</page> when checking whether the player can actually be seen.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="visible" type="boolean">Whether the player is marked as visible</ret>
	</rets>
</function>