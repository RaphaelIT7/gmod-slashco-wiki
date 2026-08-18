<function name="CanSeeFlashlights" parent="Player" type="classfunc">
	<description>
		Returns whether the player can see flashlights.<br>
		Survivors and slashers may override this through their active item or slasher.<br>
		If no override applies, the player's `SlashCoSeeFlashlights` networked boolean is returned.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="canSee" type="boolean">Whether the player can see flashlights</ret>
	</rets>
</function>