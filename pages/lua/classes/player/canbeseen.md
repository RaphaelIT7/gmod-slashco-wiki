<function name="CanBeSeen" parent="Player" type="classfunc">
	<description>
		Returns whether the player can currently be seen.<br>
		Survivors and slashers may override visibility through their active item or slasher.<br>
		Slasher visibility can also be disabled for spectators through the <page>Slasher#CannotBeSpectated</page> field.<br>
		Spectators are always considered unseeable.<br>
		If no override applies, the player's <page>Player:IsVisible</page> state is used.
	</description>
	<realm>Shared</realm>
	<group>Visibility</group>
	<rets>
		<ret name="visible" type="boolean">Whether the player can currently be seen</ret>
	</rets>
</function>