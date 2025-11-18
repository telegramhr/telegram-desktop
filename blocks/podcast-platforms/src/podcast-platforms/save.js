/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from "@wordpress/block-editor";
import Youtube from "./assets/youtube.svg";
import Spotify from "./assets/spotify.svg";
import ApplePodcasts from "./assets/apple-podcasts.svg";
import RandomPlatformIcon from "./assets/random-platform.svg";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {Element} Element to render.
 */

export default function save({ attributes }) {
	const { link1, link2, link3, link4 } = attributes;
	const blockProps = useBlockProps.save({
		className:
			"podcast-platforms-editor wp-block-create-block-podcast-platforms",
	});

	const hasLinks = link1 || link2 || link3 || link4;

	return (
		<div {...blockProps}>
			{hasLinks ? (
				<div className="podcasts-wrapper">
					{link1 && (
						<a
							href={link1}
							target="_blank"
							rel="noopener noreferrer"
							className="podcast-box youtube"
						>
							<img src={Youtube} alt="Youtube" />
							<div className="text-wrapper">
								<span className="listen">Slušaj na</span>
								<span className="title">Youtube</span>
							</div>
						</a>
					)}
					{link2 && (
						<a
							href={link2}
							target="_blank"
							rel="noopener noreferrer"
							className="podcast-box spotify"
						>
							<img src={Spotify} alt="Spotify" />
							<div className="text-wrapper">
								<span className="listen">Slušaj na</span>
								<span className="title">Spotify</span>
							</div>
						</a>
					)}
					{link3 && (
						<a
							href={link3}
							target="_blank"
							rel="noopener noreferrer"
							className="podcast-box apple"
						>
							<img src={ApplePodcasts} alt="Apple Podcasts" />
							<div className="text-wrapper">
								<span className="listen">Slušaj na</span>
								<span className="title">Apple Podcasts</span>
							</div>
						</a>
					)}
					{link4 && (
						<a
							href={link4}
							target="_blank"
							rel="noopener noreferrer"
							className="podcast-box random"
						>
							<img src={RandomPlatformIcon} alt="Svugdje" />
							<div className="text-wrapper">
								<span className="listen">Slušaj</span>
								<span className="title">Svugdje</span>
							</div>
						</a>
					)}
				</div>
			) : (
				<div className="nothing">
					<p>Unesite linkove za prikaz platformi</p>
				</div>
			)}
		</div>
	);
}
